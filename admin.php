<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Css files/admin.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(images/user.png)"></div>
                <h4>Vaishnavi Kadam</h4>
                <!--<small>Art Director</small>-->
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="#customerregister">
                            <span class="las la-user-alt"></span>
                            <small>Customer Register</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-clipboard-list"></span>
                            <small>Projects</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(images/user.png)"></div>

                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>

            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div id="customerregister">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><span class="las la-sort"></span> Username</th>
                                    <th><span class="las la-sort"></span> Email</th>
                                    <th><span class="las la-sort"></span>  Mobile</th>
                                    <th><span class="las la-sort"></span> Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Anita Kadam</h4>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        anitakadam7057@gmail.com
                                    </td>
                                    <td>
                                       7057104644
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Vaishnavi Kadam</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        vaishnavikadam340@gmail.com
                                    </td>
                                    <td>
                                        8888305617
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Durga Kadam</h4>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        durgakadam299@gmail.com
                                    </td>
                                    <td>
                                        7067123456

                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Pooja Desai</h4>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        poojadesai123@gmail.com
                                    </td>
                                    <td>
                                        8987883912
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4> Pratiksha Dhane</h4>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        pratikshadhane123@gmail.com
                                    </td>
                                    <td>	
                                        9089786723
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Amruta Desai</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        amrutadesai123@gmail.com
                                    </td>
                                    <td>
                                        7057102424
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Kartik Kadam</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    kartikkadam123@gmail.com
                                    </td>
                                    <td>
                                    9089786712
                                    </td>
                                    <td>
                                       12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Saurabh Kadam</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    saurabhkadam123@gmail.com
                                    </td>
                                    <td>
                                    8989876756

                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Sahil Pawar</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    sahilpawar123@gmail.com
                                    </td>
                                    <td>
                                    9809098212
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(images/user2.png)"></div>
                                            <div class="client-info">
                                                <h4>Sandesha Kale</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    sandeshakale123@gmail.com
                                    </td>
                                    <td>
                                    7878729834
                                    </td>
                                    <td>
                                        12345
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </main>

    </div>
</body>
</html>