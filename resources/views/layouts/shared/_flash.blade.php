{{--表单提示语成功--}}
@if (session('success'))
    <div class="am-g flash_msg">
        <div class="am-u-md-12">
            <div class="am-alert am-alert-success">
                {{ session('success') }}
            </div>
        </div>
    </div>
@endif
{{--表单提示语失败--}}
@if (session('error'))
    <div class="am-g flash_msg">
        <div class="am-u-md-12">
            <div class="am-alert am-alert-danger">
                {{ session('error') }}
            </div>
        </div>
    </div>
@endif
{{--表单验证--}}
@if (count($errors) > 0)
    <div class="layui-row flash_msg">
        <div class="layui-col-xs12">
            <div class="layui-btn layui-btn-danger" style="margin-left: 23px;width: 328px;">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endif

