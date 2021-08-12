<!-- Search widget-->
<aside class="widget widget-search">
    <form method="get" action="{{ route('our_blog') }}"> 
        <input class="form-control" name="keywords" value="{{ $search_keywords ?? '' }}" placeholder="Enter your keywords..." required>
        <button class="search-button" type="submit">
            <span class="ti-search"></span>
        </button>
    </form>
</aside>
