@extends('partial.layout.main')

@section('content')
    <h1>Bootstrap</h1>
    <h2>Layout</h2>
    <h3>Containers</h3>
    <p>See <a href="https://getbootstrap.com/docs/5.2/layout/containers/">https://getbootstrap.com/docs/5.2/layout/containers/</a>.
    </p>
    @component('layout.div', ['class'=>'container text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-sm text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-sm
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-md text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-md
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-lg text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-lg
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-xl text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-xl
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-xxl text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-xxl
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-fluid text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container
        @endslot
    @endcomponent
    @component('layout.div', ['class'=>'container-sm-fluid text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            .container-sm
        @endslot
    @endcomponent
    <h3>Grid</h3>
    @component('layout.div', ['class'=>'container text-center', 'attributes'=>['style' => 'margin: 1rem; padding: 1rem; background-color: violet; border: 1px']])
        @slot('slot')
            @component('layout.div', ['class'=>'row'])
                @slot('slot')
                    @component('layout.div', ['class'=>'col'])
                        @slot('slot')
                            Column
                        @endslot
                    @endcomponent
                    @component('layout.div', ['class'=>'col'])
                        @slot('slot')
                            Column
                        @endslot
                    @endcomponent
                    @component('layout.div', ['class'=>'col'])
                        @slot('slot')
                            Column
                        @endslot
                    @endcomponent
                @endslot
            @endcomponent
        @endslot
    @endcomponent
    <hr>


    @component('component.card', ['title' => 'Public page', 'name' => 'public'])
        <p>This is an example of a public page that does not require any additional information.</p>
        <p>My url is <a href="{!! $me->url() !!}">{!! $me->url() !!}</a>.</p>
        <p>You can access the settings at the following <a href="index.php?module=Admin&controller=Config">link</a>.</p>
    @endcomponent
@endsection

@push('scripts')
    {{-- <script src="https://alixar/Templates/Lib/additional-script.js"></script> --}}
@endpush
