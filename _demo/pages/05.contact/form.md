---
title: Contact
image: /contact/Dark-newyork-city-wallpaper.jpg
date: '14:02 25-09-2019'
form:
    name: contactform
    fields:
        name:
            label: false
            placeholder: 'your name'
            type: text
            validate:
                required: true
        mail:
            label: false
            placeholder: 'your mail'
            type: text
            validate:
                required: true
        subject:
            label: false
            placeholder: subject
            type: text
            validate:
                required: true
        text:
            label: false
            placeholder: message
            type: textarea
            validate:
                required: true
        g-recaptcha-response:
            type: captcha
            label: false
    buttons:
        reset:
            type: reset
            value: Reset
        submit:
            type: submit
            value: Send
    process:
        captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Many thanks for your inquiry. I will contact you soon.'
        display: /contact
---

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie iaculis nisl sed interdum. Praesent mi nisl, efficitur in felis vel, molestie sollicitudin eros. Mauris urna quam, euismod nec lacinia non, dignissim eu odio. Donec nisl nibh, facilisis at nisl vitae, porttitor hendrerit libero. Integer vel neque in ante condimentum malesuada. Mauris dictum nunc enim, non tincidunt arcu tincidunt vel. Aliquam gravida, massa id semper tincidunt, tellus sapien accumsan tortor, in placerat arcu justo ac urna. Vestibulum blandit ultrices neque, eget congue tortor vehicula id.
