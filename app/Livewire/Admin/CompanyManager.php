<?php

namespace App\Livewire\Admin;

use App\Models\Company;
use App\Traits\HandlesFileUploads;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyManager extends Component
{
    use WithFileUploads, HandlesFileUploads;

    public $companies;
    public $name = '';
    public $logo;
    public $editId = null;
    public $deleteId = null;
    public $message = '';

    public function mount()
    {
        $this->loadCompanies();
    }

    public function loadCompanies()
    {
        $this->companies = Company::orderBy('sort_order')->orderBy('id')->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:100',
            'logo' => $this->editId ? 'nullable|image|max:2048' : 'required|image|max:2048',
        ]);

        $dir = public_path('assets/images/companies');

        if ($this->editId) {
            $company = Company::findOrFail($this->editId);
            $company->name = $this->name;
            if ($this->logo) {
                $this->deleteUpload($company->logo);
                $filename = 'company_' . time() . '.' . $this->logo->getClientOriginalExtension();
                $this->saveUpload($this->logo, $dir, $filename);
                $company->logo = 'assets/images/companies/' . $filename;
            }
            $company->save();
            $this->message = 'Company updated.';
        } else {
            $filename = 'company_' . time() . '.' . $this->logo->getClientOriginalExtension();
            $this->saveUpload($this->logo, $dir, $filename);
            Company::create([
                'name'       => $this->name,
                'logo'       => 'assets/images/companies/' . $filename,
                'sort_order' => Company::max('sort_order') + 1,
                'active'     => true,
            ]);
            $this->message = 'Company added.';
        }

        $this->reset(['name', 'logo', 'editId']);
        $this->loadCompanies();
    }

    public function edit($id)
    {
        $c = Company::findOrFail($id);
        $this->editId = $c->id;
        $this->name   = $c->name;
        $this->logo   = null;
        $this->message = '';
    }

    public function cancelEdit()
    {
        $this->reset(['name', 'logo', 'editId', 'message']);
    }

    public function toggleActive($id)
    {
        $c = Company::findOrFail($id);
        $c->active = !$c->active;
        $c->save();
        $this->loadCompanies();
    }

    public function moveUp($id)
    {
        $items = $this->companies;
        foreach ($items as $i => $item) {
            if ($item->id == $id && $i > 0) {
                $prev = $items[$i - 1];
                [$item->sort_order, $prev->sort_order] = [$prev->sort_order, $item->sort_order];
                $item->save(); $prev->save();
                break;
            }
        }
        $this->loadCompanies();
    }

    public function moveDown($id)
    {
        $items = $this->companies;
        foreach ($items as $i => $item) {
            if ($item->id == $id && $i < count($items) - 1) {
                $next = $items[$i + 1];
                [$item->sort_order, $next->sort_order] = [$next->sort_order, $item->sort_order];
                $item->save(); $next->save();
                break;
            }
        }
        $this->loadCompanies();
    }

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $c = Company::findOrFail($this->deleteId);
        $this->deleteUpload($c->logo);
        $c->delete();
        $this->deleteId = null;
        $this->message = 'Company removed.';
        $this->loadCompanies();
    }

    public function render()
    {
        return view('livewire.admin.company-manager');
    }
}
