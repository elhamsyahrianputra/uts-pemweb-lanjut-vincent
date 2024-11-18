<footer class="pt-4 pb-4 text-center bg-light">
    <div class="container">
      <div class="my-3">
        <div class="h4">{{ $profile->name }}</div>
        <p>{{ $profile->job }}</p>
        <div class="social-nav">
          <nav role="navigation">
            <ul class="nav justify-content-center">
              @foreach ($social_media as $item)
              <li class="nav-item"><a class="nav-link" href="{{ $item->url }}" title="{{ $item->name }}"><i class="fab fa-{{ $item->name }}"></i><span class="menu-title sr-only">{{ $item->name }}</span></a></li>
              @endforeach
            </ul>
          </nav>
        </div>
      </div>
      <div class="text-small text-secondary">
        <div class="mb-1">&copy; Super Folio. All rights reserved.</div>
        <div>
          <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
      </div>
    </div>
  </footer>
