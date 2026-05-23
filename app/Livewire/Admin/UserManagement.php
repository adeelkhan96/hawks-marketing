<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $users = [];
    public $name = '';
    public $email = '';
    public $password = '';
    public $role = 'editor';
    public $editingId = null;
    public $showForm = false;
    public $deleteConfirmId = null;

    public function mount(): void
    {
        $this->loadUsers();
    }

    public function loadUsers(): void
    {
        $this->users = User::orderBy('name')->get();
    }

    public function showCreateForm(): void
    {
        $this->reset(['name', 'email', 'password', 'editingId']);
        $this->role = 'editor';
        $this->showForm = true;
    }

    public function edit(int $id): void
    {
        $user = User::findOrFail($id);
        $this->editingId = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->password = '';
        $this->showForm = true;
    }

    public function save(): void
    {
        $uniqueRule = 'required|email|unique:users,email' . ($this->editingId ? ",{$this->editingId}" : '');

        $rules = [
            'name'  => 'required|string|max:255',
            'email' => $uniqueRule,
            'role'  => 'required|in:admin,editor',
        ];

        if (!$this->editingId) {
            $rules['password'] = 'required|min:8';
        } elseif ($this->password) {
            $rules['password'] = 'min:8';
        }

        $this->validate($rules);

        if ($this->editingId) {
            $data = ['name' => $this->name, 'email' => $this->email, 'role' => $this->role];
            if ($this->password) {
                $data['password'] = $this->password;
            }
            User::findOrFail($this->editingId)->update($data);
            session()->flash('message', 'User updated successfully.');
        } else {
            User::create([
                'name'     => $this->name,
                'email'    => $this->email,
                'password' => $this->password,
                'role'     => $this->role,
            ]);
            session()->flash('message', 'User created successfully.');
        }

        $this->showForm = false;
        $this->reset(['name', 'email', 'password', 'editingId']);
        $this->loadUsers();
    }

    public function confirmDelete(int $id): void
    {
        $this->deleteConfirmId = $id;
    }

    public function delete(): void
    {
        if ($this->deleteConfirmId === auth()->id()) {
            session()->flash('error', 'You cannot delete your own account.');
            $this->deleteConfirmId = null;
            return;
        }

        User::findOrFail($this->deleteConfirmId)->delete();
        $this->deleteConfirmId = null;
        session()->flash('message', 'User deleted successfully.');
        $this->loadUsers();
    }

    public function cancelDelete(): void
    {
        $this->deleteConfirmId = null;
    }

    public function cancel(): void
    {
        $this->showForm = false;
        $this->reset(['name', 'email', 'password', 'editingId']);
    }

    public function render()
    {
        return view('livewire.admin.user-management');
    }
}
