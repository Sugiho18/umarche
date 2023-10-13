<x-tests.app>
<x-slot name="header">
    コンポーネントテスト１

    <x-tests.card title="タイトル" content="本文" :message="$message"/>
    <x-tests.card/>
    <x-tests.card content="あういえお"/>
    <x-tests.card class="bg-red-300" title="CSS変更" content="あういえお"/>
</x-tests.app>
