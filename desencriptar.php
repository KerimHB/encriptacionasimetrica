<?php

$clave_privada = "-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBAIq+OuNycSSlwgHZqC9vrj6+7JB8BqYy8oUboArvWXK94LuxRdov
XRCTq1IQAitHuHULwfYS5t/Wat94ruNFYFUCAwEAAQJAYts4Smd4how0t+zGEUaZ
+MtA85HrivAyLPWKC0CPk1j5LFOOOsi6MzdE6r/S2BY7xwuCm4OfWa3BiqKUldCR
4QIhANO3PiD3/Kk6+KhKIETbRjeLrjShcA9vyjCBH7aNhh0fAiEAp8ODiHNfziCu
v02Oppgwwu7aAy7L1U2tyKRpBsMZ4AsCIQDFiy8fWASaavnlHPUrCmZkIaL0XMXQ
wYAo7fKHRVokBQIgWVH6XRL4hlnWUFptwfszswXSo3Et63KBPVtz47rKswMCIEGJ
KTLLLMQIUQPl/bd/VIw1Fy/cy6N/XnX+n6qNxVgv
-----END RSA PRIVATE KEY-----
";

if (isset($_POST["txtTexto"])) {
    $texto = $_POST["txtTexto"];

    $res = openssl_get_privatekey($clave_privada);

    openssl_private_decrypt(base64_decode($texto), $desencriptado, $res);

    echo $desencriptado;
}
