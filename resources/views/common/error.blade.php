@if ($errors->any())
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                {{ $error }}--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}

    <div class="alert alert-error">
{{--        <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--        <h4>提示</h4>--}}
        @foreach ($errors->all() as $error)
            {{ $error }}
            <br>
         @endforeach

    </div>
@endif
