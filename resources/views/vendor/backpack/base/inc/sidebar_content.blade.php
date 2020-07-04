<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon lar la-user-circle'></i> Пользователи</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('news') }}'><i class='nav-icon lar la-newspaper'></i> Новости</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon las la-book'></i> Страницы</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('image') }}'><i class='nav-icon lar la-images'></i> Галерея</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('certificate') }}'><i class='nav-icon las la-certificate'></i> Сертификаты</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('vacancy') }}'><i class='nav-icon las la-user-tie'></i> Вакансии</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Настройки</span></a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-cogs"></i> Тех. Поддержка</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Логи</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Бэкап</a></li>
    </ul>
</li>
