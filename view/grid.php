<?php

function change_footer_version() {
    return ' ';
}

add_filter('update_footer', 'change_footer_version', 9999);

function custom_footer_admin() {
    return ' ';
}

add_filter('admin_footer_text', 'custom_footer_admin');
?>


<div class="wrap">

    <!-- Tabs navs -->
    <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="ex3-tab-1"
                data-mdb-toggle="tab"
                href="#ex3-tabs-1"
                role="tab"
                aria-controls="ex3-tabs-1"
                aria-selected="true"
                >Step 1</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="ex3-tab-2"
                data-mdb-toggle="tab"
                href="#ex3-tabs-2"
                role="tab"
                aria-controls="ex3-tabs-2"
                aria-selected="false"
                >Step 2k</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="ex3-tab-3"
                data-mdb-toggle="tab"
                href="#ex3-tabs-3"
                role="tab"
                aria-controls="ex3-tabs-3"
                aria-selected="false"
                >Step 3</a
            >
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex2-content">
        <div
            class="tab-pane fade show active"
            id="ex3-tabs-1"
            role="tabpanel"
            aria-labelledby="ex3-tab-1"
            >
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border bg-dark">
                            <div class="card bg-dark">
                                <div class="card-header">Featured</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item border bg-dark">Cras justo odio</li>
                                    <li class="list-group-item border bg-dark">Dapibus ac facilisis in</li>
                                    <li class="list-group-item border bg-dark">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-2"
            role="tabpanel"
            aria-labelledby="ex3-tab-2"
            >
            tab 2 content
        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-3"
            role="tabpanel"
            aria-labelledby="ex3-tab-3"
            >
            Tab 3 content
        </div>
    </div>
    <!-- Tabs content -->

</div>


