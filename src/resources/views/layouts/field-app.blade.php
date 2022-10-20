@php
    $config_container = SewidanGetTagConfig('container' , $config);
    $config_label = SewidanGetTagConfig('label' , $config);
    $config_field_div = SewidanGetTagConfig('field_div' , $config);
    $config_field_error = SewidanGetTagConfig('field_error' , $config);
@endphp

@if($config_container)
    <div class="{{isset($config_container['class']) ? $config_container['class'] :'' }} {{$errors->has($name) ? 'has-error':'' }}"
         id="{{$name}}_wrap">
        @endif

        @if($config_label)
            <label for="{{$name}}" {!! isset($config_label['options']) ? sewidanOptionsToStr($config_label['options']) : '' !!}>
                {{$label}}
                @if(isset($field_attributes['required']) && $field_attributes['required'])
                    <span style="color: #f83333;">*</span>
                @endif
            </label>
        @endif

        @if($config_field_div)
            <div {!! isset($config_field_div['options']) ? sewidanOptionsToStr($config_field_div['options']) : '' !!}>
                @endif

                @include('fields::fields.'. $field_type)


                @if($config_field_error)

                    <span {!! isset($config_field_error['options']) ? sewidanOptionsToStr($config_field_error['options']) : '' !!}>
                        {{$errors->first($name)}}
                    </span>
                @endif

                @if($config_field_div)
            </div>
        @endif

        @if($config_container)
    </div>
@endif
@if(in_array($field_type , ['file','multiFile-upload']) && isset($field_attributes['class']) && strpos($field_attributes['class'],'file_upload_preview'))
    <script>
        if (window.file_upload_preview === undefined) {

            window.file_upload_preview = true;
            document.addEventListener('DOMContentLoaded', function () {
                var head = document.head;
                var body = document.body;
                var link = document.createElement("link");

                link.type = "text/css";
                link.rel = "stylesheet";
                link.href = '/SewidanField/plugins/bootstrap-fileinput/css/fileinput.min.css';
                head.appendChild(link);

                var scripts = [
                    '/SewidanField/plugins/bootstrap-fileinput/js/fileinput.min.js',
                ];
                for (var i = 0; i < 1; i++) {
                    var script = document.createElement("script");
                    script.type = "text/javascript";
                    script.src = scripts[i];
                    body.append(script);
                }

            }, false);
        }
    </script>
@endif
