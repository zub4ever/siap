@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Tabs
@endsection

@section('main-content')
    <div class="row">
        <!-- nav tab -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Basic Tab</div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="ti-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ti-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="ti-mobile"></i> Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav tab -->
        <!-- Nav tab with Dropdown -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card text-left">

                <div class="card-body">
                    <h4 class="card_title">Tab With Dropdown</h4>
                    <ul class="nav nav-tabs" id="dropdwonTab">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab1" data-toggle="tab" href="#home1" aria-controls="home" aria-expanded="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" aria-controls="profile" aria-expanded="false">Profile</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">@fat</a>
                                <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="tab" aria-controls="dropdown2" aria-expanded="true">@mdo</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false">About</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="dropdwonTabContent">
                        <div role="tabpanel" class="tab-pane active show" id="home1" aria-labelledby="home-tab1" aria-expanded="true">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane" id="profile1" role="tabpanel" aria-labelledby="profile-tab1" aria-expanded="false">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="true">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                        <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta doloribus, ullam, ut obcaecati laboriosam eos, officia dolores voluptatum quas impedit placeat cumque animi quos odio quibusdam voluptatibus magnam minima facilis necessitatibus libero! Error velit veritatis veniam ipsa? Reiciendis quas qui neque atque repudiandae quidem incidunt, a consectetur ipsam impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Nav tab with Dropdown -->
    </div>
    <div class="row">
        <!-- Tab with Pill -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="card_title">Tabs With Pills</div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ti-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="ti-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="ti-mobile"></i> Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ratione officia libero maiores, explicabo cumque dolorem quasi rerum molestiae. Ex ut tempora odit voluptatem, libero culpa nostrum dolores enim velit magnam repellendus! Porro repudiandae mollitia odit eveniet molestias consequuntur deleniti quisquam ducimus quidem autem? Error culpa nostrum, nemo quo quisquam illo architecto id nihil pariatur esse recusandae alias quaerat voluptates iure consequuntur repellat cupiditate perferendis iste praesentium. Suscipit, molestias consequatur.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ratione officia libero maiores, explicabo cumque dolorem quasi rerum molestiae. Ex ut tempora odit voluptatem, libero culpa nostrum dolores enim velit magnam repellendus! Porro repudiandae mollitia odit eveniet molestias consequuntur deleniti quisquam ducimus quidem autem? Error culpa nostrum, nemo quo quisquam illo architecto id nihil pariatur esse recusandae alias quaerat voluptates iure consequuntur repellat cupiditate perferendis iste praesentium. Suscipit, molestias consequatur.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ratione officia libero maiores, explicabo cumque dolorem quasi rerum molestiae. Ex ut tempora odit voluptatem, libero culpa nostrum dolores enim velit magnam repellendus! Porro repudiandae mollitia odit eveniet molestias consequuntur deleniti quisquam ducimus quidem autem? Error culpa nostrum, nemo quo quisquam illo architecto id nihil pariatur esse recusandae alias quaerat voluptates iure consequuntur repellat cupiditate perferendis iste praesentium. Suscipit, molestias consequatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab With Pill -->
        <!-- Vertical tab-->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex vertical_tabs">
                        <div class="nav flex-column nav-pills mr-mob-0 mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="ti-home"></i> Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="ti-user"></i> Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="ti-email"></i> Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="ti-settings"></i> Settings</a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat blanditiis eaque ab qui accusamus laudantium perspiciatis sint quibusdam at eius consequatur quos possimus aspernatur debitis deleniti sed odit provident repudiandae suscipit officiis, tempora voluptas, excepturi perferendis. Quasi delectus tempora temporibus ipsa soluta mollitia, doloremque corrupti labore, quae voluptatem obcaecati consequuntur ad ipsum fugit impedit cum. Facere, ea? Eveniet quisquam ratione voluptate rerum tempora, consectetur assumenda. Porro temporibus suscipit corporis nulla?</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat blanditiis eaque ab qui accusamus laudantium perspiciatis sint quibusdam at eius consequatur quos possimus aspernatur debitis deleniti sed odit provident repudiandae suscipit officiis, tempora voluptas, excepturi perferendis. Quasi delectus tempora temporibus ipsa soluta mollitia, doloremque corrupti labore, quae voluptatem obcaecati consequuntur ad ipsum fugit impedit cum. Facere, ea? Eveniet quisquam ratione voluptate rerum tempora, consectetur assumenda. Porro temporibus suscipit corporis nulla?</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat blanditiis eaque ab qui accusamus laudantium perspiciatis sint quibusdam at eius consequatur quos possimus aspernatur debitis deleniti sed odit provident repudiandae suscipit officiis, tempora voluptas, excepturi perferendis. Quasi delectus tempora temporibus ipsa soluta mollitia, doloremque corrupti labore, quae voluptatem obcaecati consequuntur ad ipsum fugit impedit cum. Facere, ea? Eveniet quisquam ratione voluptate rerum tempora, consectetur assumenda. Porro temporibus suscipit corporis nulla?</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat blanditiis eaque ab qui accusamus laudantium perspiciatis sint quibusdam at eius consequatur quos possimus aspernatur debitis deleniti sed odit provident repudiandae suscipit officiis, tempora voluptas, excepturi perferendis. Quasi delectus tempora temporibus ipsa soluta mollitia, doloremque corrupti labore, quae voluptatem obcaecati consequuntur ad ipsum fugit impedit cum. Facere, ea? Eveniet quisquam ratione voluptate rerum tempora, consectetur assumenda. Porro temporibus suscipit corporis nulla?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical tab-->
    </div>
@endsection
