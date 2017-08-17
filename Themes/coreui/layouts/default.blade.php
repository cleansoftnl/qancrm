<!DOCTYPE html>
<html lang="en">
{!! Theme::partial('theme.head') !!}
<body class="{{ $currentRoute or '' }}">

@yield('layout-content')

{!! Theme::partial('theme.footer') !!}

{!! Theme::partial('theme.modal') !!}

{!! Theme::asset()->container('footer')->scripts() !!}
@yield('scripts')



@yield('layout-scripts')

</body>
</html>
