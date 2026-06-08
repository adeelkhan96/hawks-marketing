<div style="margin-top:40px;padding-top:28px;border-top:1px solid #f3f4f6;display:flex;align-items:center;flex-wrap:wrap;gap:12px;">
  <span style="font-size:13px;font-weight:700;color:#374151;">Share this post:</span>
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener"
     style="display:inline-flex;align-items:center;gap:6px;background:#1877f2;color:#fff;padding:7px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
    <i class="fab fa-facebook-f"></i> Facebook
  </a>
  <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener"
     style="display:inline-flex;align-items:center;gap:6px;background:#000;color:#fff;padding:7px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
    <i class="fab fa-x-twitter"></i> X
  </a>
  <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($blog->title) }}" target="_blank" rel="noopener"
     style="display:inline-flex;align-items:center;gap:6px;background:#0a66c2;color:#fff;padding:7px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
    <i class="fab fa-linkedin-in"></i> LinkedIn
  </a>
  <a href="https://wa.me/?text={{ urlencode($blog->title . ' - ' . url()->current()) }}" target="_blank" rel="noopener"
     style="display:inline-flex;align-items:center;gap:6px;background:#25d366;color:#fff;padding:7px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
    <i class="fab fa-whatsapp"></i> WhatsApp
  </a>
</div>
