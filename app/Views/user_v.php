<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotte Admin</title>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="./assets/css/common.css">
    <script src="./assets/js/jquery-2.2.4.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/common.js"></script>
</head>
<body>
    <!-- 기존 main-sidebar를 import -->
    <section class="main-sidebar" style="background: #222d32;"></section>
    <!-- // 기존 main-sidebar를 import -->
    
    <!-- content-wrapper -->
    <section class="admin content-wrapper">
        <form action="" class="admin-form">
            <h2 class="admin-tit"><em>사용자 관리</em> 권한관리</h2>
            <div class="admin-content">
                <div class="admin-head">
                    <ul class="admin-head__nav">
                        <li class="active"><a href="01_사용자조회.html">사용자 조회</a></li>
                        <li class=""><a href="02_멤버조회.html">멤버 조회</a></li>
                        <li class=""><a href="03_아이템조회.html">아이템 조회</a></li>
                        <li class=""><a href="04_프로젝트조회.html">프로젝트 조회</a></li>
                        <li class=""><a href="05_멤버사용자관리.html">멤버 사용자 관리</a></li>
                        <li class=""><a href="06_멤버아이템관리.html">멤버 아이템 관리</a></li>
                        <li class=""><a href="07_프로젝트사용자관리.html">프로젝트 사용자 관리</a></li>
                    </ul>
                    <div class="admin-head__edit">
                        <ul class="admin-edit">
                            <li class="btnCreate btn-sm">생성</li>
                            <li class="btnEdit btn-sm">편집</li>
                            <li class="btnDel btn-sm">삭제</li>
                        </ul>
                        <p class="admin-search search-box">
                            <input type="text" class="ip-search" placeholder="검색">
                            <button><i class="fas fa-search"></i></button>
                        </p>
                    </div>
                </div>
                <div class="admin-body">
                    <table class="table-basic">
                        <thead>
                            <tr>
                                <th class="select">Select</th>
                                <th>User Id <i class="fas fa-caret-up"></i></th>
                                <th>Password <i class="fas fa-caret-up"></i></th>
                                <th>User Name <i class="fas fa-caret-up"></i></th>
                                <th>Employee ID <i class="fas fa-caret-up"></i></th>
                                <th>Valid date from <i class="fas fa-caret-up"></i></th>
                                <th>Valid date to <i class="fas fa-caret-up"></i></th>
                                <!-- 소팅 버튼 아래 화살표로 변경할 때 => <i class="fas fa-caret-down"></i> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="user-check">
                                    <input type="checkbox">
                                </td>
                                <td class="user-id">1000</td>
                                <td class="user-pw">12344</td>
                                <td class="user-name">김00</td>
                                <td class="user-emply"></td>
                                <td class="user-vFrom"></td>
                                <td class="user-vTo"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <!-- 생성버튼 클릭 시 팝업 -->
        <div class="pop-window pop-create">
            <span class="popClose pop-close"><i class="fas fa-times"></i></span>
            <h3>사용자 생성</h3>
            <div class="pop-window__head">
                <h4>사용자 생성</h4>
                <h5>새로운 사용자를 생성합니다.</h5>
            </div>
            <form action="">
                <ul class="pop-list">
                    <li class="pop-item">
                        <label for="user_id_cr">user id:</label>
                        <input type="text" class="ip-basic" id="user_id_cr">
                    </li>
                    <li class="pop-item">
                        <label for="user_pw_cr">password:</label>
                        <input type="password" class="ip-basic" id="user_pw_cr">
                        <button type="button" class="btn-sm bg-on">임의 패스워드 생성</button>
                    </li>
                    <li class="pop-item">
                        <label for="user_name_cr">user name:</label>
                        <input type="text" class="ip-basic" id="user_name_cr">
                    </li>
                    <li class="pop-item">
                        <label for="emply_id_cr">employee id:</label>
                        <input type="text" class="ip-basic" id="emply_id_cr">
                    </li>
                    <li class="pop-item">
                        <label for="valid_from_cr">valid date from:</label>
                        <input type="date" class="ip-basic" id="valid_from_cr">
                    </li>
                    <li class="pop-item">
                        <label for="valid_to_cr">valid date to:</label>
                        <input type="date" class="ip-basic" id="valid_to_cr">
                    </li>
                    <li class="pop-item">
                        <label for="down_data_cr">download data:</label>
                        <input type="checkbox" id="down_data_cr">
                    </li>
                </ul>
                <div class="pop-mail">
                    <input type="checkbox" id="mail_to_cr">
                    <label for="mail_to_cr">새로 생성한 사용자에게 알림 메일 보내기</label>
                </div>
                <div class="pop-btns">
                    <button type="submit" class="popCreate btn-sm bg-on">생성</button>
                    <button type="reset" class="popCancel btn-sm bg-off">취소</button>
                </div>
            </form>
        </div>
    
        <!-- 편집버튼 클릭 시 팝업 -->
        <div class="pop-window pop-edit">
            <span class="popClose pop-close"><i class="fas fa-times"></i></span>
            <h3>사용자 편집</h3>
            <div class="pop-window__head">
                <h4>사용자 편집</h4>
                <h5>사용자 정보를 편집합니다.</h5>
            </div>
            <form action="">
                <ul class="pop-list">
                    <li class="pop-item">
                        <label for="user_id_ed">user id:</label>
                        <input type="text" class="ip-basic" id="user_id_ed">
                    </li>
                    <li class="pop-item">
                        <label for="user_pw_ed">password:</label>
                        <input type="password" class="ip-basic" id="user_pw_ed">
                        <button type="button" class="btn-sm bg-on">임의 패스워드 생성</button>
                    </li>
                    <li class="pop-item">
                        <label for="user_name_ed">user name:</label>
                        <input type="text" class="ip-basic" id="user_name_ed">
                    </li>
                    <li class="pop-item">
                        <label for="emply_id_ed">employee id:</label>
                        <input type="text" class="ip-basic" id="emply_id_ed">
                    </li>
                    <li class="pop-item">
                        <label for="valid_from_ed">valid date from:</label>
                        <input type="date" class="ip-basic" id="valid_from_ed">
                    </li>
                    <li class="pop-item">
                        <label for="valid_to_ed">valid date to:</label>
                        <input type="date" class="ip-basic" id="valid_to_ed">
                    </li>
                    <li class="pop-item">
                        <label for="down_data_ed">download data:</label>
                        <input type="checkbox" id="down_data_ed">
                    </li>
                </ul>
                <div class="pop-mail">
                    <input type="checkbox" id="mail_to_ed">
                    <label for="mail_to_ed">새로 생성한 사용자에게 알림 메일 보내기</label>
                </div>
                <div class="pop-btns">
                    <button type="submit" class="popCreate btn-sm bg-on">완료</button>
                    <button type="reset" class="popCancel btn-sm bg-off">취소</button>
                </div>
            </form>
        </div>
    </section>
    <!-- // content-wrapper -->
</body>
</html>