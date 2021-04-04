<li class="nav-item {{ Request::is('articles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articles.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Articles</span>
    </a>
</li>
<li class="nav-item {{ Request::is('tags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('tags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Tags</span>
    </a>
</li>
<li class="nav-item {{ Request::is('comments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('comments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Comments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('articleTags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('articleTags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Article Tags</span>
    </a>
</li>
