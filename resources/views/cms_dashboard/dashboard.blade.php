@extends('layouts.cms', [
                'page_title'   => "Dashboard",
                'page_header' => "Content Manager Dashboard"
                ])

@section('content')

    <article id="post-6" class="post-6 page type-page status-publish hentry">
        <header class="entry-header">
            <h1 class="entry-title">Preview</h1>
        </header><!-- .entry-header -->

        <div class="entry-content post_content">
            <p>
                <iframe id="previewFrame" class="web" src="/cms-frame" name="previewFrame"
                       width="100%" frameborder="0" height="95%">
                </iframe>
            </p>
        </div><!-- .entry-content -->
    </article>

@stop

@section('scripts')
    <script type="text/javascript">
        $(function(){
            var myString = window.location.href;
            var mySplitResult = myString.split("?");
            var thisUrl = mySplitResult.slice(1);
            $('#previewFrame').attr('src','http://webthemez.com/demo/'+ thisUrl);
            $('#removeFrame').attr('href', 'http://webthemez.com/demo/'+ thisUrl);
            $('#downloadTemp').attr('href', 'http://webthemez.com/'+ thisUrl);
            $('#mainHome').attr('href', 'http://webthemez.com/');

            $('#devices').on('click', '> a', function(){
                $('#devices').find('a').removeClass('devActive');
                $(this).addClass('devActive');
                var deviceVal = $(this).attr('data-role');
                $('#previewTemp .entry-content').addClass('resizeDevice');
                if(deviceVal == 'tl'){
                    $('#previewTemp .entry-content').css({'width': '1024px', 'height':'768px'});
                } else if(deviceVal == 'tp'){
                    $('#previewTemp .entry-content').css({'width': '768px', 'height':'1024px'});
                } else if(deviceVal == 'sl'){
                    $('#previewTemp .entry-content').css({'width': '480px', 'height':'340px'});
                } else if(deviceVal == 'sp'){
                    $('#previewTemp .entry-content').css({'width': '320px', 'height':'480px'});
                } else if(deviceVal == 'auto'){
                    $('#previewTemp .entry-content').css({'width': '100%', 'height':'auto'});
                    $('#previewTemp .entry-content').removeClass('resizeDevice');
                }
            });
        });
    </script>
@stop