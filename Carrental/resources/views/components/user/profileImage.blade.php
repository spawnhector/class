<style>
    .profile-pic {
        width: 200px;
        max-height: 200px;
        display: inline-block;
    }

    .file-upload {
        display: none;
    }

    .circler {
        border-radius: 100% !important;
        overflow: hidden;
        width: 128px;
        height: 128px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        position: absolute;
        top: 158px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .p-image {
        position: relative;
        top: 58px;
        right: -84px;
        color: #666666;
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .p-image:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .upload-button {
        font-size: 1.2em;
    }

    .upload-button:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        color: #999;
    }
</style>
<div class="small-12 medium-2 large-2 columns">
    <div class="circler">
        <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

    </div>
    <div class="p-image">
        <i class="fa fa-camera upload-button"></i>
        <input style="display: none" class="file-upload" type="file" accept="image/*" />
    </div>
</div>
<script>
    $(document).ready(function() {

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button").on('click', function() {

            $(".file-upload").click();
        });
    });
</script>