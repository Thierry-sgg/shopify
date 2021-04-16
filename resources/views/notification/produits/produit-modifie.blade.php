@component('mail::message')
# Du nouveau sur Shopify !

Un nouveau produit vien d'être ajouté sur votre plateforme Shopify !
N'hésitez pas à le consulter en cliquant sur le bouton ci-dessous :

@component('mail::button', ['url' => url('produits')])
Voir le produit
@endcomponent

Merci d'avoir choisi Shopify pour votre shopping !<br><br><br>
{{ config('app.name') }}
@endcomponent
