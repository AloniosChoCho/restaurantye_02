@extends('backend.layouts.app2')
@section('title')
Typography
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Typography</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ui Elements</a></li>
                                <li class="breadcrumb-item active">Typography</li>
                            </ol>
                        </div>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Start Page-content-wrapper -->
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="ms-3 me-4">
                                        <h1 class="display-4 mb-0">A</h1>
                                    </div>
                                    <div class="flex-1 align-self-center">
                                        <p class="mb-2">Font Family</p>
                                        <h5>"Roboto", sans-serif</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->

                        <div class="card">
                            <div class="card-body">
                            
                                <h4 class="card-title">Headings</h4>
                                <p class="card-title-desc">All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code
                                        class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>
                            
                                <h1 class="mb-3">h1. Bootstrap heading <small class="text-muted">Semibold 2.10938rem
                                        (33.75px)</small></h1>
                                <h2 class="mb-3">h2. Bootstrap heading <small class="text-muted">Semibold 1.6875rem
                                        (27px)</small></h2>
                                <h3 class="mb-3">h3. Bootstrap heading <small class="text-muted">Semibold 1.47656rem
                                        (23.625px)</small></h3>
                                <h4 class="mb-3">h4. Bootstrap heading <small class="text-muted">Semibold 1.26563rem
                                        (20.2501px)</small></h4>
                                <h5 class="mb-3">h5. Bootstrap heading <small class="text-muted">Semibold 1.05469rem
                                        (16.875px)</small></h5>
                                <h6 class="mb-0">h6. Bootstrap heading <small class="text-muted">Semibold 0.84375rem
                                        (13.5px)</small></h6>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <div class="ms-3 me-4">
                                                <h1 class="display-4 fw-normal mb-0">Aa</h1>
                                            </div>
                                            <div class="flex-1 align-self-center">
                                                <p class="mb-2">Font Weight</p>
                                                <h5>400</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <div class="ms-3 me-4">
                                                <h1 class="display-4 fw-bold mb-0">Aa</h1>
                                            </div>
                                            <div class="flex-1 align-self-center">
                                                <p class="mb-2">Font Weight</p>
                                                <h5>600</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Display headings</h4>
                                <p class="card-title-desc">Traditional heading elements are designed to work best in
                                    the meat of your page content. </p>

                                <h1 class="display-1">Display 1</h1>
                                <h1 class="display-2">Display 2</h1>
                                <h1 class="display-3">Display 3</h1>
                                <h1 class="display-4">Display 4</h1>
                                <h1 class="display-5">Display 5</h1>
                                <h1 class="display-6 mb-0">Display 6</h1>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card-->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Inline text elements</h4>
                                <p class="card-title-desc">Styling for common inline HTML5 elements.</p>

                                <p class="lead">
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                </p>
                                <p>You can use the mark tag to
                                    <mark>highlight</mark> text.
                                </p>
                                <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                <p><ins>This line of text is meant to be treated as an addition to the
                                        document.</ins></p>
                                <p><u>This line of text will render as underlined</u></p>
                                <p><small>This line of text is meant to be treated as fine print.</small></p>
                                <p><strong>This line rendered as bold text.</strong></p>
                                <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                            </div>
                            <!-- End cardbody -->
                        </div>
                        <!-- End card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Unstyled List</h4>
                                <p class="card-title-desc">Remove the default <code
                                        class="highlighter-rouge">list-style</code> and left margin on list items
                                    (immediate children only). <strong>This only applies to immediate
                                        children list items</strong>, meaning you will need to add the class for any
                                    nested lists as well.</p>

                                <ul class="list-unstyled mb-0">
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                </ul>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Inline List</h4>
                                <p class="card-title-desc">Remove a list???s bullets and apply some light <code
                                        class="highlighter-rouge">margin</code> with a combination of two classes,
                                    <code class="highlighter-rouge">.list-inline</code> and
                                    <code class="highlighter-rouge">.list-inline-item</code>.
                                </p>

                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">Lorem ipsum</li>
                                    <li class="list-inline-item">Phasellus iaculis</li>
                                    <li class="list-inline-item">Nulla volutpat</li>
                                </ul>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Blockquotes</h4>
                                <p class="card-title-desc">For quoting blocks of content from another source
                                    within
                                    your document. Wrap <code class="highlighter-rouge">&lt;blockquote
                                        class="blockquote"&gt;</code> around any <abbr
                                        title="HyperText Markup Language">HTML</abbr> as the quote.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <blockquote class="blockquote font-size-16 mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Integer
                                                    posuere erat a ante.</p>
                                                <footer class="blockquote-footer mt-3">Someone famous in <cite
                                                        title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-lg-6">
                                        <div class="mt-4 mt-lg-0">
                                            <blockquote class="blockquote  blockquote-reverse font-size-16 mb-0">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    posuere erat a ante.</p>
                                                <footer class="blockquote-footer mt-3">Someone famous in <cite
                                                        title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Description list alignment</h4>
                                <p class="card-title-desc">Align terms and descriptions horizontally by using our
                                    grid system???s predefined classes (or semantic mixins). For longer terms, you can
                                    optionally add a <code class="highlighter-rouge">.text-truncate</code> class to
                                    truncate the text with an ellipsis.</p>

                                <dl class="row mb-0">
                                    <dt class="col-sm-3">Description lists</dt>
                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                    <dt class="col-sm-3">Euismod</dt>
                                    <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget
                                        lacinia odio sem nec elit.</dd>
                                    <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget
                                        metus.</dd>

                                    <dt class="col-sm-3">Malesuada porta</dt>
                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                    <dt class="col-sm-3">Nesting</dt>
                                    <dd class="col-sm-9 mb-0">
                                        <dl class="row mb-0">
                                            <dt class="col-sm-4">Nested definition list</dt>
                                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc
                                                augue blandit nunc.</dd>
                                        </dl>
                                    </dd>
                                </dl>

                            </div>
                            <!-- End Cardbody-->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

            </div>
            <!-- End Page-Content-Wrapper -->

        </div>
        <!-- Container-Fluid -->
    </div>
    <!-- End Page-Content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <script>document.write(new Date().getFullYear())</script> ?? Agroxa <span
                        class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                        Themesbrand.</span>
                </div>

            </div>
        </div>
    </footer>
</div>
@endsection