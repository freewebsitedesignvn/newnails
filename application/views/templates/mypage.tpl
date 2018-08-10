{* mypage.tpl *}
{extends file='layout.tpl'}
{* {extends file='myproject.tpl'} *}
{block name=title}My Page Title{/block}
{block name=head}
  <link href="/css/mypage.css" rel="stylesheet" type="text/css"/>
  <script src="/js/mypage.js"></script>
{/block}
{block name=body}My HTML Page Body goes here{/block}
{block name=nav}Nav Here{/block}
{block name=banner}{include file="menu1.tpl"}{/block}
{block name=content}content Here{/block}