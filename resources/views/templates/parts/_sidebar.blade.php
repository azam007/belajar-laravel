<div class="sidebar" data-color="green" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Plan Manager
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    @component('templates.components.menu', ['link' => 'adasd', 'icon' => 'dashboard'])
                        Dashboard
                    @endcomponent
                    @component('templates.components.menu', ['link' => route('create.plan'), 'icon' => 'note_add'])
                        Create Plan
                    @endcomponent
                    @component('templates.components.menu', ['link' => route('manage.plan'), 'icon' => 'assignment'])
                        Manage Plan
                    @endcomponent
                    @component('templates.components.menu', ['link' => 'adasd', 'icon' => 'settings'])
                        Setting
                    @endcomponent
                    @component('templates.components.menu', ['link' => 'adasd', 'icon' => 'delete'])
                       Trash
                    @endcomponent
                </ul>
            </div>
        </div>
        