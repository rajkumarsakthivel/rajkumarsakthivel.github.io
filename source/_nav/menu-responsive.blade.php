<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Uses"
                href="/uses"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/uses') ? 'active text-blue' : '' }}"
            >Uses</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Talks"
                href="/talks"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/uses') ? 'active text-blue' : '' }}"
            >Talks</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
