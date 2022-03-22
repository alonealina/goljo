// 以下情報バー切り替えについて
let tmb1 = document.querySelector(".tmb1");
let tmb2 = document.querySelector(".tmb2");
let tmb3 = document.querySelector(".tmb3");
let main1 = document.getElementById("main1");
let main2 = document.getElementById("main2");
let main3 = document.getElementById("main3");

tmb1.addEventListener("click", function () {
    main1.hidden = false;
    main2.hidden = true;
    main3.hidden = true;
});

tmb2.addEventListener("click", function () {
    main1.hidden = true;
    main2.hidden = false;
    main3.hidden = true;
});

tmb3.addEventListener("click", function () {
    main1.hidden = true;
    main2.hidden = true;
    main3.hidden = false;
});

