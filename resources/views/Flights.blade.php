@extends("layout")
@section("content")

<section class="awe-parallax category-heading-section-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="category-heading-content category-heading-content__2 text-uppercase">
            <!-- BREADCRUMB -->
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><span>Flight</span></li>
                </ul>
            </div>
            <!-- BREADCRUMB -->
            <div class="find">
                <h2 class="text-center">Find Your Flight</h2>
                <form>
                    <div class="form-group">
                        <div class="form-elements">
                            <label>From</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>To</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-marker-1"></i>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Depart on</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>
                        <div class="form-elements">
                            <label>Return on</label>
                            <div class="form-item">
                                <i class="awe-icon awe-icon-calendar"></i>
                                <input type="text" class="awe-calendar" value="Date">
                            </div>
                        </div>

                        <div class="form-actions">
                            <input type="submit" value="Find My Flight">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop