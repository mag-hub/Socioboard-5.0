<div class="tab-pane fade show active" id="facebook-preview" role="tabpanel" aria-labelledby="facebook-tab-preview">
    <!--begin::Image-->
    <div class="preview-tab">
        <div class="preview-tab-inner">
            <!--begin::Top-->
            <div class="d-flex align-items-center">
                <!--begin::Symbol-->
                <div class="symbol symbol-40 symbol-light-success mr-5">
                    <span class="symbol-label">
                        <img src="{{ asset('/media/svg/avatars/047-girl-25.svg') }}" class="h-75 align-self-end" alt=""/>
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Info-->
                <div class="d-flex flex-column flex-grow-1">
                    <a href="javascript:;" class="text-hover-primary mb-1 font-size-lg font-weight-bolder">@php echo session('user')['userDetails']['first_name']. ' '.session('user')['userDetails']['last_name']; @endphp</a>
                    <span class="text-muted font-weight-bold">Just now</span>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Top-->

            <!--begin::Bottom-->
            <div class="pt-4" id="facebook_preview_ids">
                <!--begin::Text-->
                <p class="font-size-lg font-weight-normal pt-5 mb-2 postText">
                    {{ $content }}
                </p>
                <!--end::Text-->
                <!--begin::Image-->
                <div class="imageShow d-flex flex-column" >
                    @include('contentstudio::scheduling.components._media_show')
                </div>

                <div class="d-flex justify-content-around mt-2">
                    <div class=" font-weight-bolder font-size-sm p-2 disabled">
                        <span class="svg-icon svg-icon-md svg-icon-danger">
                            <i class="fas fa-heart fa-fw"></i> Like
                        </span>
                    </div>

                    <div class="font-weight-bolder font-size-sm p-2 disabled">
                        <span class="svg-icon svg-icon-md svg-icon-dark-25">
                            <i class="fas fa-comments fa-fw"></i> Comments
                        </span>
                    </div>
                    <div class="font-weight-bolder font-size-sm p-2 disabled">
                        <span class="svg-icon svg-icon-md svg-icon-dark-25">
                            <i class="fas fa-share fa-fw"></i> Share
                        </span>
                    </div>
                </div>
            <!--end::Action-->
            </div> <!--end::Bottom-->
        </div>
    </div> <!--end::Image--> 
</div> 