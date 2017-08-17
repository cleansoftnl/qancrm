@extends(sprintf('theme.%s::layouts.default', config('cms.core.app.themes.frontend')))

@section('layout-content')

  <div class="site-container">
    <section class="homepage">
      <main class="content">
        {!! Theme::partial('theme.content') !!}
      </main>
    </section>
  </div>

@stop
