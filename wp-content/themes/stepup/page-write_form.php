<?php get_header(); ?>
<div class="main_container detail_page write_page">
  <div class="title_content">
    <input class="title" type="text" placeholder="게시글 제목"></input>
  </div>
  <div class="preview_content">
    <table>
      <tr>
        <td colspan="3">
          <input class="person_img" type="file">
        </td>
      </tr>
      <tr>
        <th colspan="3">
          <input class="info_name" type="text" placeholder="정보 타이틀">
        </th>
      </tr>
      <tr>
        <th>
          <input class="data_type" type="text" placeholder="데이터 타입">
        </th>
        <td>
          <input class="data_value" type="text" placeholder="데이터">
        </td>
        <td>
          <button class="del_data_layer">삭제</button>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button class="add_data_layer">추가하기</button>
        </td>
      </tr>
    </table>
  </div>
  <div class="main_content">
    <ul>
      <li>
        <h3>
          <a href="">1</a>. <input class="data_title" type="text" placeholder="데이터 타이틀">
        </h3>
        <div class="layer_setting">
          <button>메인 데이터 추가하기</button>
          <button>서브 데이터 추가하기</button>
          <button>삭제하기</button>
        </div>
        <ul>
          <textarea placeholder="데이터"></textarea>
        </ul>
      </li>
      <li>
        <h3>
        <a href="">1-1</a>. <input class="data_title" type="text" placeholder="서브 데이터 타이틀">
        </h3>
        <div class="layer_setting">
          <button>삭제하기</button>
        </div>
        <ul>
        <textarea placeholder="데이터"></textarea>
        </ul>
      </li>
    </ul>
    <div class="save_form">
      <button>저장</button>
      <button>취소</button>
    </div>
  </div>
</div>
<?php get_footer(); ?>