<div class="col">
    <div class="pix-dynamic-content">
        <h2 class='section-header'>Vehicle List<a class="btn primary float-right" href="#">View all rented vehicle</a></h2>
        <div id="pixad-listing" class="list">

            @foreach ($dealer as $clients)
            @foreach ($clients->vehicle as $clientVehicle)
            <article class="card clearfix" id="">
                <div class="card__img">
                    <a href="/car/{{$clientVehicle->id}}">
                        <img width="1280" height="720" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg" class="img-responsive wp-post-image" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg 1280w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-600x338.jpeg 600w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-300x169.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-1024x576.jpeg 1024w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-768x432.jpeg 768w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-200x113.jpeg 200w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-850x478.jpeg 850w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-320x181.jpeg 320w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-350x197.jpeg 350w" sizes="(max-width: 1280px) 100vw, 1280px" /> </a>

                    <span class="card__wrap-label"><span class="card__label">NEW</span></span>

                </div>
                <div class="card__inner">
                    <h2 class="card__title ui-title-inner"><a href="/car/{{$clientVehicle->id}}">{{$clientVehicle->name}}</a></h2>
                    <div class="decor-1"></div>
                    <div class="card__desc_wrap">
                        <div class="card__description">
                            <p></p>
                        </div>

                        <!-- Car Details -->
                        <ul class="card__list list-unstyled">
                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Year: </span>

                                <span class="card-list__info">
                                    {{$clientVehicle->year}} </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Mileage: </span>

                                <span class="card-list__info">
                                    {{$clientVehicle->mileage}} </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Fuel: </span>
                                <span class="card-list__info">
                                    {{$clientVehicle->fuel}} </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Engine: </span>

                                <span class="card-list__info">
                                    {{$clientVehicle->engine}} </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Horsepower: </span>

                                <span class="card-list__info">
                                    200 hp </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Drive: </span>
                                <span class="card-list__info">
                                    Rear </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Condition: </span>
                                <span class="card-list__info">
                                    Used </span>
                            </li>

                            <li class="card-list__row">
                                <span class="card-list__title">
                                    Stock Status: </span>
                                <span class="card-list__info">
                                    In stock </span>
                            </li>
                        </ul><!-- / Car Details -->
                    </div>
                    <div class="card__price">PRICE:<span class="card__price-number">&#036;{{$clientVehicle->price}}<span class="after-price-text">/ per day</span></span></div>
                </div>
            </article>
            @endforeach
            @endforeach
        </div>
    </div>
</div>
