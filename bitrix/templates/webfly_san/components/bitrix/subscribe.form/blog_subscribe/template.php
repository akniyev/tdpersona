<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<h2 class="title-type04"><?=GetMessage("wf_subscribe")?></h2>
<form action="<?=$arResult["FORM_ACTION"]?>" class="subscribe-form">
  <?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
    <input type="hidden" name="sf_RUB_ID[]" id="sf_RUB_ID_<?=$itemValue["ID"]?>" value="<?=$itemValue["ID"]?>" checked/>
	<?endforeach;?>
  <fieldset>
    <div class="row">
      <span class="input-type01"><input type="text" name="sf_EMAIL" value="<?=GetMessage("subscr_form_email_title")?>" /></span>
      <input type="submit" class="btn-input" value="<?=GetMessage("subscr_form_button")?>" />
    </div>
  </fieldset>
</form>