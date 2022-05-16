<div>
    <div class="columns is-multiline">

    @foreach($appslist as $app)
        <!--Credit Cards-->
            <div class="column is-2 app-item-card">
                <div class="dashboard-card is-credit-cards">
                    <div class="title-wrap py-2 mb-0 mt-3">
                        <a href="{{ $app->getUrl() }}" target="_blank" class="dark-inverted action-link" style="white-space: nowrap; overflow: hidden" data-filter-match>{{ $app->getName() }}</a>
                    </div>

                    <div class="card-block">
                        <div class="card-block-inner is-dark-bordered-12 py-1 ">
                            <div class="h-avatar is-large" style="width: 100%;max-width: inherit">
                                <a href="{{ $app->getUrl() }}" target="_blank">
                                    <img src="{{ $app->getIcon() }}" class="avatar is-squared" style="width: 100%;height: 100%">
                                </a>
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/stacks/illustrator.svg" alt="">
                            </div>

                            {{--                                                        <div class="h-avatar is-large">--}}
                            {{--                                                            <img class="avatar is-squared"  src="{{ $app->getIcon() }}" data-demo-src="assets/img/photo/demo/apps/1.jpg" alt="">--}}
                            {{--                                                        </div>--}}
                            <div class="credit-card-end">
                                <!--Dropdown-->
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-coins"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>Invest</span>
                                                    <span>Buy more stocks</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-dollar-up"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>Compare</span>
                                                    <span>Compare with others</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-bank"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>Trade</span>
                                                    <span>View opportunities</span>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="{{ $app->getUrl()  }}" target="_blank" class="dropdown-item is-media">
                                                <div class="icon">
                                                    <i class="lnil lnil-wallet-alt-1"></i>
                                                </div>
                                                <div class="meta">
                                                    <span>Google Play</span>
                                                    <span>Open on App Store </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info-block-inner py-1">
                            <div class="title-wrap">
                                {{--                                                        <h3 class="dark-inverted" style="white-space: nowrap; overflow: hidden" >Linerock Investm</h3>--}}
{{--                                    <span class="" style="color: #283252 !important;">Dev: </span>--}}

                                <div class="info-block-line py-0">
                                    <h4 class="dark-inverted"> </h4>
                                </div>
                                <a href="{{ $app->getDeveloper()->getUrl() }}" target="_blank" class="action-link">
                                    {{ $app->getDeveloper()->getName() }}
                                </a>
                            </div>
                            <div class="info-block-line my-0 py-0">
                                <span style="font-weight: 400" >{{ $app->getCategory()->getName() }}</span>
                            </div>
                            <div class="info-block-line py-0">
                                <h4 class="dark-inverted">Installs</h4>
                                @if($app->getInstalls() > 1000000000)
                                    <span class="is-dark-bordered-12"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app->getInstalls()/1000000) }} B</span>
                                @elseif($app->getInstalls() > 1000000)
                                    <span class="is-dark-bordered-12"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app->getInstalls()/1000) }} M</span>
                                @elseif($app->getInstalls() > 1000)
                                    <span class="is-dark-bordered-12"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ number_format($app->getInstalls()/1000) }} K</span>
                                @else
                                    <span class="is-dark-bordered-12"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ $app->getInstalls() }}</span>
                                @endif
                                {{--                                                            <span  style="font-weight: 600"><i aria-hidden="true" class="fas fa-circle text-success"></i>{{ ($app->getInstalls() > 1000) ? }}</span>--}}
                            </div>
                            <div class="info-block-line py-0">
                                <h4 class="dark-inverted">Release</h4>
                                @php
                                    $relasedate = \Illuminate\Support\Carbon::make($app->getReleased()->date)->diffForHumans();
                                    $arrdate = explode(' ',$relasedate,);
                                    $value = $arrdate[0];
                                    $short = $arrdate[1];
                                    $code = $short[0];
                                @endphp
                                <span  style="font-weight: 600">{{ $value. " " . $code }}</span>
                            </div>
                            <div class="info-block-line  py-0">
                                <h4 class="dark-inverted">iap ads</h4>
                                <span class="dark-inverted" style="font-weight: bold">4.6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

    <button class="button h-button is-primary is-raised" wire:click="load()">
        <span class="icon">
          <i aria-hidden="true" class="fas fa-truck-loading"></i>
        </span>
        <span>Load More...</span>
    </button>

    <!--Infinite Loader-->
    <div class="infinite-scroll-loader" data-filter-hide>
        <div class="infinite-scroll-loader-inner">
            <div class="loader is-loading"></div>
            <div class="loader-end is-hidden">
                <span>No more items to load</span>
            </div>
        </div>
    </div>

    </div>
</div>
