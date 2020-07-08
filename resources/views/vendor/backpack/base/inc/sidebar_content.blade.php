<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon lar la-user-circle'></i> Пользователи</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon las la-book'></i> <span>Страницы</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon las la-list'></i> Категории</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon las la-shopping-basket'></i> Товары</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('service') }}'><i class='nav-icon lar la-handshake'></i> Услуги</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('request') }}'><i class='nav-icon las la-sms'></i> Обратная связь</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-info"></i> О компании</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('partner') }}'><i class='nav-icon las la-user-friends'></i> Партнеры</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('video') }}'><i class='nav-icon lar la-file-video'></i> Видео</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('advantage') }}'><i class='nav-icon las la-check-double'></i> Преимущества</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('slide') }}'><i class='nav-icon lar la-copy'></i> Слайды</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('image') }}'><i class='nav-icon lar la-images'></i> Галерея</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('certificate') }}'><i class='nav-icon las la-certificate'></i> Сертификаты</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('vacancy') }}'><i class='nav-icon las la-user-tie'></i> Вакансии</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('news') }}'><i class='nav-icon lar la-newspaper'></i> Новости</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact') }}'><i class='nav-icon las la-phone'></i> Контакты</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-cogs"></i> Тех. Поддержка</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Логи</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Бэкап</a></li>
    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Настройки</span></a></li>
