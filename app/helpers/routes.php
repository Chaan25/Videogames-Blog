<?php

    route('GET', "/", "index");
    route('GET', "/categories", "categories");
    route('GET', "/community", "community");
    route('GET', "/contact", "contact");
    route('GET', "/review", "review");

    notFound();
