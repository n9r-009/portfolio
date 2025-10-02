<span class="p-country-name" style="display:none;">Japan</span>
<div class="l-form__desc">
  <p class="l-form__descTxt">入力必須の付いている項目は<br class="m-hide--pc">必ずご入力ください。</p>
</div>

<div class="l-form__doboz">
  <div class="l-form__dobozWrap">

    <div class="l-form__line">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">お名前</div>
        <div class="l-form__req">必須</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__input">[text* user_name placeholder "お名前"]</div>
      </div>
    </div>

    <div class="l-form__line">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">ふりがな</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__input">[text user_ruby placeholder "ふりがな"]</div>
      </div>
    </div>

    <div class="l-form__line">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">メールアドレス</div>
        <div class="l-form__req">必須</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__input">[email* user_email placeholder "info@example.com"]</div>
      </div>
    </div>

    <div class="l-form__line">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">電話番号</div>
        <div class="l-form__req">必須</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__input">[tel* user_tel placeholder "0123-45-6789"]</div>
      </div>
    </div>

    <div class="l-form__line l-form__line--top">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">ご住所</div>
        <div class="l-form__req">必須</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__lineRbxAddress">
          <div class="l-form__lineRbxAddressItem">
            <span class="l-form__lineRbxAddressItemPost">〒</span>
            <div class="l-form__input l-form__input--small">[text user_postcode class:p-postal-code placeholder "321-0345"]</div>
          </div>
          <div class="l-form__lineRbxAddressItem">
            <div class="l-form__input">[text user_address class:p-region class:p-locality class:p-street-address class:p-extended-address placeholder placeholder "栃木県宇都宮市大谷町"]</div>
          </div>
        </div>
      </div>
    </div>

    <div class="l-form__line l-form__line--top">
      <div class="l-form__lineLbx">
        <div class="l-form__ttl">お問い合わせ内容</div>
        <div class="l-form__req">必須</div>
      </div>
      <div class="l-form__lineRbx">
        <div class="l-form__textarea">[textarea user_message]</div>
      </div>
    </div>

    <div class="l-form__privacy">
      <div class="l-form__privacyCheckbox">[acceptance user_acceptance]個人情報保護方針に同意する[/acceptance]</div>
    </div>

    <div class="l-form__submit">
      <div class="l-form__submitTag">[submit "送信"]</div>
    </div>

  </div>
</div>