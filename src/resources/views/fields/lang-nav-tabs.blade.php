<ul class="nav nav-tabs">
    @foreach (config('translatable.locales') as $code)
        <li class="@if($code == locale()) active @endif">
            <a data-toggle="tab" href="#{{$nav_id}}_{{$code}}">
                {{ optional(config('field.locales')[$code]) ? config('field.locales')[$code]['native'] : $code }}
            </a>
        </li>
    @endforeach
</ul>