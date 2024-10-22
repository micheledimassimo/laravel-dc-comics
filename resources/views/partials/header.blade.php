@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
            'active' => true,
        ],
        [
            'url' => '/comics.show',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp

<header>
    <nav>
        <ul>
            @foreach ($links as $link)
                <li>
                    @if ($link['active'])
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <del>
                            {{ $link['label'] }}
                        </del>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>
