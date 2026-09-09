<link rel="stylesheet" href="{{asset('js/backend/cropper/cropper.css')}}">
<link rel="stylesheet" href="/dist/bootstrap.min.css" type="text/css">
<style>
    #cropper img {
        max-width: 100%;
    }
</style>
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Orezanie fotografie</h3>
        </div>
        <div class="col-md-12">
            <div id="cropper">
                <form action="/admin/cropper/crop-photo" id="crop_form" class="text-center" method="POST">
                    <img src="/images/uploaded/{{$path}}" alt="">
                    {{csrf_field()}}
                    <input type="hidden" name="src" value="{{$path}}">
                    <input type="hidden" name="y">
                    <input type="hidden" name="x">
                    <input type="hidden" name="height">
                    <input type="hidden" name="width">
                    <input type="hidden" name="proportions"> <br>
                    <button type="submit" class="btn btn-primary">
                         Orezať fotografiu
                    </button>
                    <a onclick="window.close();" class="btn btn-danger">Ukončiť orezanie</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/dist/bootstrap.min.js"></script>
<script src="{{asset('/js/backend/cropper/cropper.js')}}"></script>

<script>
    var cropper = $('#cropper img').cropper({
        aspectRatio: {{$aspectRatio }},
        viewMode: 2,
        dragMode: 'move',
        zoomTo: 1,
        minCropBoxWidth: {{$minCropboxWidth + 1000}},
        toggleDragModeOnDblclick: false,
        zoomable: false,
        //wheelZoomRatio: 0.02,
        zoom: function (e) {
            var data = $(this).cropper('getData');
            // Zoom out
            /*if (e.ratio > e.oldRatio) {

                // Prevent zoom out again
                if (data.width < {{$minCropboxWidth}}) {
                    e.preventDefault();
                }
            }*/
            /*if (e.ratio > 0.7) {
                e.preventDefault();
                $(this).cropper('zoomTo', 0.7);
            }*/
        },
        crop: function(e) {
            $('#cropper img').parent().find('[name=y]').val(e.y);
            $('#cropper img').parent().find('[name=x]').val(e.x);
            $('#cropper img').parent().find('[name=width]').val(e.width);
            $('#cropper img').parent().find('[name=height]').val(e.height);
        }
    });
</script>