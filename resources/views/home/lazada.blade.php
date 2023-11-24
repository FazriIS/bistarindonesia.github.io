<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Lazada</h2>
        </div>
        <div id="portfolio-container" class="row">
            @foreach ($dataShopee as $ds)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="{{ $ds->link }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('mentahan/' . $ds->img) }}" alt="..." />
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
