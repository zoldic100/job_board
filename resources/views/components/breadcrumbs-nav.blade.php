<nav {{ $attributes }}>
    <ul class="flex space-x-4">
      <li>
        <a href="/" class="hover:text-slate-200/50">Home</a>
      </li>
  
      @foreach ($links as $label => $link)
        <li>🡢</li>
        <li>
          <a href="{{ $link }}" class="hover:text-slate-200/50">
            {{ $label }}
          </a>
        </li>
      @endforeach
    </ul>
  </nav>