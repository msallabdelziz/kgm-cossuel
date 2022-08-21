<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('my', array (
  'validators' => 
  array (
    'This value should be false.' => 'ဤတန်ဖိုးသည် false ဖြစ်ရမည်။',
    'This value should be true.' => 'ဤတန်ဖိုးသည် true ဖြစ်ရမည်။',
    'This value should be of type {{ type }}.' => 'ဤတန်ဖိုးသည် {{ type }} အမျိုးအစားဖြစ်ရမည်။ ',
    'This value should be blank.' => 'ဤတန်ဖိုးသည် ကွပ်လပ်မဖြစ်သင့်ပါ။',
    'The value you selected is not a valid choice.' => 'သင်ရွေးချယ်သောတန်ဖိုးသည် သင့်လျှော်သော် တန်ဖိုးမဟုတ်ပါ။',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'သင်သည် အနည်းဆုံးရွေးချယ်မှု {{ limit }} ခုရွေးချယ်ရမည်။',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'သင်သည်အများဆုံး {{ limit }} ခုသာရွေးချယ်ခွင့်ရှိသည်။',
    'One or more of the given values is invalid.' => 'ပေးထားသောတန်ဖိုးတစ်ခု (သို့မဟုတ်) တစ်ခုထက်ပို၍မမှန်ကန်ပါ။',
    'This field was not expected.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This field is missing.' => 'ဤကွက်လပ်ကိုမမျှော်လင့်ထားပါ။',
    'This value is not a valid date.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော်ရက်စွဲမဟုတ်ပါ။',
    'This value is not a valid datetime.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် ရက်စွဲ/အချိန် မဟုတ်ပါ။',
    'This value is not a valid email address.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော် အီးမေးလိပ်စာ မဟုတ်ပါ။',
    'The file could not be found.' => 'ဖိုင်ရှာမတွေ့ပါ။',
    'The file is not readable.' => 'ဤဖိုင်ကို ဖတ်၍မရပါ။',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဖိုင်အရွယ်အစား အလွန်ကြီးနေသည် ({{ size }} {{ suffix }}). ခွင့်ပြုထားသော အများဆုံး ဖိုင်ဆိုဒ်သည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ဖိုင်၏ mime အမျိုးအစားမမှန်ကန်ပါ ({{ type }})။ ခွင့်ပြုထားသော mime အမျိုးအစားများမှာ {{ types }}.',
    'This value should be {{ limit }} or less.' => 'ဤတန်ဖိုးသည် {{ limit }} (သို့မဟုတ်) {{ limit }} ထက်နည်းသင့်သည်။',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{ limit }} (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။ | ဤတန်ဖိုးသည် အလွန်ရှည်လွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} ခုနှင့်အထက်ရှိသင့်သည်။',
    'This value should be {{ limit }} or more.' => 'ဤတန်ဖိုးသည် {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုသင့်သည်။',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ဤတန်ဖိုးသည် အလွန်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} (သို့မဟုတ်) ထို့ထက်ပိုရှိသင့်သည်။ | ဤတန်ဖိုးသည်တိုလွန်းသည်။ ၎င်းတွင်အက္ခရာ {{limit}} လုံးနှင့်အထက်ရှိသင့်သည်။',
    'This value should not be blank.' => 'ဤတန်ဖိုးသည်ကွက်လပ်မဖြစ်သင့်ပါ။',
    'This value should not be null.' => 'ဤတန်ဖိုးသည် null မဖြစ်သင့်ပါ။',
    'This value should be null.' => 'ဤတန်ဖိုးသည် null ဖြစ်သင့်သည်။',
    'This value is not valid.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောတန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid time.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော အချိန်တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid URL.' => 'ဤတန်ဖိုးသည်မှန်ကန်သော URL တန်ဖိုးမဟုတ်ပါ။',
    'The two values should be equal.' => 'တန်ဖိုးနှစ်ခုသည် တူညီသင့်သည်။',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။ ခွင့်ပြုထားသည့်အများဆုံးဖိုင်အရွယ်အစားသည် {{ limit }} {{ suffix }} ဖြစ်သည်။',
    'The file is too large.' => 'ဤဖိုင်သည် အလွန်ကြီးသည်။',
    'The file could not be uploaded.' => 'ဤဖိုင်ကိုတင်၍မရပါ။',
    'This value should be a valid number.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနံပါတ်ဖြစ်သင့်သည်။',
    'This file is not a valid image.' => 'ဤဖိုင်သည်မှန်ကန်သော ဓါတ်ပုံမဟုတ်ပါ။',
    'This is not a valid IP address.' => '၎င်းသည်တရားဝင် IP လိပ်စာမဟုတ်ပါ။',
    'This value is not a valid language.' => 'ဤတန်ဖိုးသည် မှန်ကန်သောဘာသာစကားမဟုတ်ပါ။',
    'This value is not a valid locale.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောဘာသာပြန်မဟုတ်ပါ။',
    'This value is not a valid country.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောနိုင်ငံမဟုတ်ပါ။',
    'This value is already used.' => 'ဤတန်ဖိုးသည် အသုံးပြုပြီးသားဖြစ်သည်။',
    'The size of the image could not be detected.' => 'ဓါတ်ပုံအရွယ်အစားကိုရှာမတွေ့ပါ။',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ပုံ၏အလျားသည် ကြီးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ပုံ၏အလျားသည် သေးလွန်းသည် ({{ width }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအလျားသည် {{max_width}}px ဖြစ်သည်။',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ပုံ၏အနံသည် ကြီးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အများဆုံးအနံသည် {{max_height}}px ဖြစ်သည်။',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ပုံ၏အနံသည် သေးလွန်းသည် ({{ height }}px)။ ခွင့်ပြုထားသည့်အနည်းဆုံးအနံသည် {{min_height}}px ဖြစ်သည်။',
    'This value should be the user\'s current password.' => 'ဤတန်ဖိုးသည်အသုံးပြုသူ၏ လက်ရှိစကားဝှက်ဖြစ်သင့်သည်။',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ဤတန်ဖိုးသည်စာလုံး {{limit}} အတိအကျရှိသင့်သည်။',
    'The file was only partially uploaded.' => 'ဤဖိုင်သည်တစ်စိတ်တစ်ပိုင်းသာ upload တင်ခဲ့သည်။',
    'No file was uploaded.' => 'မည်သည့် ဖိုင်မျှ upload မလုပ်ခဲ့ပါ။',
    'No temporary folder was configured in php.ini.' => 'php.ini တွင်ယာယီဖိုင်တွဲကိုပြင်ဆင်ထားခြင်းမရှိပါ၊',
    'Cannot write temporary file to disk.' => 'ယာရီဖိုင်ကို disk မရေးနိုင်ပါ။',
    'A PHP extension caused the upload to fail.' => 'PHP extension တစ်ခုကြောင့် upload တင်၍မရနိုင်ပါ။',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ထို့ထက်မပိုသင့်ပါ။',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'ဤ collection တွင် {{limit}} element (သို့မဟုတ်) ၎င်းထက်နည်းသင့်သည်။',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'ဤစုစည်းမှုတွင် {{limit}} element အတိအကျပါသင့်သည်။',
    'Invalid card number.' => 'ကဒ်နံပါတ်မမှန်ပါ။',
    'Unsupported card type or invalid card number.' => 'ကဒ်အမျိုးအစားမမှန်ပါ (သို့မဟုတ်) ကဒ်နံပါတ်မမှန်ပါ။',
    'This is not a valid International Bank Account Number (IBAN).' => 'ဤတန်ဖိုးသည် တရား၀င်နိုင်ငံတကာဘဏ်အကောင့်နံပါတ် (International Bank Account Number, IBAN) မဟုတ်ပါ။',
    'This value is not a valid ISBN-10.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-10 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISBN-13.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISBN-10 (သို့မဟုတ်) ISBN-13 တန်ဖိုးမဟုတ်ပါ၊',
    'This value is not a valid ISSN.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ISSN တန်ဖိုးမဟုတ်ပါ။',
    'This value is not a valid currency.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် ငွေကြေးတန်ဖိုးမဟုတ်ပါ။',
    'This value should be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်ညီသင့်သည်။',
    'This value should be greater than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည်။',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်ကြီးသင့်သည် (သို့မဟုတ်) ဤတန်ဖိုးသည် {{ compared_value }} ညီသင့်သည်။ ',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူညီမျှသင့်သည်။',
    'This value should be less than {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက်မနဲသောတဲ့ တန်ဖိုးဖြစ်သင့်သည်။',
    'This value should be less than or equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} ထက် မနည်းသောတန်ဖိုး (သို့မဟုတ်) ညီမျှသောတန်ဖိုးဖြစ်သင့်သည်။',
    'This value should not be equal to {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value }} နှင့်မညီသင့်ပါ။',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{ compared_value_type }} {{ compared_value }} နှင့်ထပ်တူမညီမျှသင့်သည်။',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်ကြီးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ max_ratio }} ဖြစ်သည်။',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ဤဓာတ်ပုံအချိုးအစားသည်အလွန်သေးလွန်းသည်။ ({{ ratio }})။ ခွင့်ပြုထားသောဓာတ်ပုံအချိုးအသားသည် {{ min_ratio }} ဖြစ်သည်။',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'ဤဓာတ်ပုံသည် စတုရန်းဖြစ်နေသည် ({{ width }}x{{ height }}px)။ စတုရန်းဓာတ်ပုံများကို ခွင့်မပြုပါ။',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် အလျှားလိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). အလျှားလိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ဤဓာတ်ပုံသည် ဒေါင်လိုက်ဖြစ်နေသည် ({{ width }}x{{ height }}px). ဒေါင်လိုက်ဓာတ်ပုံများခွင့်မပြုပါ။',
    'An empty file is not allowed.' => 'ဖိုင်အလွတ်ကိုတင်ခွင့်မပြုပါ။',
    'The host could not be resolved.' => 'host ဖြေရှင်း၍မနိုင်ပါ။',
    'This value does not match the expected {{ charset }} charset.' => 'ဤတန်ဖိုးသည် မျှော်မှန်းထားသော {{ charset }} စားလုံးနှင့် ကိုက်ညီမှုမရှိပါ။',
    'This is not a valid Business Identifier Code (BIC).' => '၎င်းသည်မှန်ကန်သော Business Identifier Code (BIC) မဟုတ်ပါ။',
    'Error' => 'အမှား',
    'This is not a valid UUID.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် UUID မဟုတ်ပါ။',
    'This value should be a multiple of {{ compared_value }}.' => 'ဤတန်ဖိုးသည် {{compared_value}} ၏ စတူတန်ဖိုးဖြစ်သင့်သည်။',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'ဤ Business Identifier Code (BIC) သည် IBAN {{ iban }} နှင့်ဆက်စပ်မှုမရှိပါ။',
    'This value should be valid JSON.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် JSON တန်ဖိုးဖြစ်သင့်သည်။',
    'This collection should contain only unique elements.' => 'ဤ collection ကိုယ်ပိုင် elements များ ပါသင့်သည်။',
    'This value should be positive.' => 'ဤတန်ဖိုးသည် အပေါင်းဖြစ်သင့်သည်။',
    'This value should be either positive or zero.' => 'ဤတန်ဖိုးသည် အပေါင်း (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value should be negative.' => 'ဤတန်ဖိုးသည် အနုတ် ဖြစ်သင့်သည်။',
    'This value should be either negative or zero.' => 'ဤတန်ဖိုးသည် အနုတ် (သို့မဟုတ်) သုည ဖြစ်သင့်သည်။',
    'This value is not a valid timezone.' => 'ဤတန်ဖိုးသည် မှန်ကန်သော အချိန်ဇုန်မဟုတ်ပါ။',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'ဤစကားဝှက် သည် ဒေတာပေါက်ကြားမှုတစ်ခုဖြစ်ခဲ့သည်။ ဤစကား၀ှက်ကိုအသုံးမပြုရပါ။  ကျေးဇူးပြု၍ အခြားစကားဝှက်ကိုသုံးပါ။',
    'This value should be between {{ min }} and {{ max }}.' => 'ဤတန်ဖိုးသည် {{ min }} နှင့် {{ max }} ကြားရှိသင့်သည်။',
    'This value is not a valid hostname.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် hostname မဟုတ်ပါ။',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'ဤ collection တွင်ပါပါ၀င်သော elements အရေအတွက်သည် {{ compared_value }} ၏ စတူဖြစ်သင့်သည်။ ',
    'This value should satisfy at least one of the following constraints:' => 'ဤတန်ဖိုးသည် အောက်ပါကန့်သတ်ချက်များအနက်မှအနည်းဆုံးတစ်ခု ဖြည့်ဆည်းပေးသင့်သည်။',
    'Each element of this collection should satisfy its own set of constraints.' => 'ဤ collection ၏ element တစ်ခုစီသည်၎င်း၏ကိုယ်ပိုင်ကန့်သတ်ချက်များကိုဖြည့်ဆည်းသင့်သည်။',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် အပြည်ပြည်ဆိုင်ရာငွေချေးသက်သေခံနံပါတ် ,International Securities Identification Number (ISIN) မဟုတ်ပါ။',
    'This value should be a valid expression.' => 'ဤတန်ဖိုးသည်မှန်ကန်သောစကားရပ်ဖြစ်သင့်သည်။',
    'This form should not contain extra fields.' => 'ဤ ဖောင်သည် field အပိုများ မပါ၀င်သင့်ပါ။',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload တင်သောဖိုင်သည်အလွန်ကြီးလွန်းသည်။ ကျေးဇူးပြု၍ သေးငယ်သည့်ဖိုင်ကိုတင်ရန်ကြိုးစားပါ။',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'သင့်လျှော်သော် CSRF တိုကင် မဟုတ်ပါ။ ကျေးဇူးပြု၍ဖောင်ကိုပြန်တင်ပါ။',
    'This value is not a valid HTML5 color.' => 'ဤတန်ဖိုးသည် သင့်လျှော်သော် HTML5 အရောင်မဟုတ်ပါ။',
    'Please enter a valid birthdate.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောမွေးနေ့ကိုထည့်ပါ။',
    'The selected choice is invalid.' => 'သင့် ရွေးချယ်မှုသည်မမှန်ကန်ပါ။',
    'The collection is invalid.' => 'ဤ collection သည်သင့်လျှော်သော် collection မဟုတ်ပါ။',
    'Please select a valid color.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအရောင်ကိုရွေးပါ။',
    'Please select a valid country.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနိုင်ငံကိုရွေးပါ။',
    'Please select a valid currency.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောငွေကြေးကိုရွေးပါ။',
    'Please choose a valid date interval.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲကိုရွေးပါ။',
    'Please enter a valid date and time.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲနှင့်အချိန် ကိုထည့်ပါ။',
    'Please enter a valid date.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ရက်စွဲကိုထည့်ပါ။',
    'Please select a valid file.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောနေ ဖိုင်ကိုရွေးချယ်ပါ။',
    'The hidden field is invalid.' => 'မသင့် လျှော်သော် hidden field ဖြစ်နေသည်။',
    'Please enter an integer.' => 'ကျေးဇူးပြု၍ Integer တန်ဖိုးသာထည့်ပါ။',
    'Please select a valid language.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော ဘာသာစကားကိုရွေးချယ်ပါ။',
    'Please select a valid locale.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော locale ကိုရွေးချယ်ပါ။',
    'Please enter a valid money amount.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော ပိုက်ဆံပမာဏ ကိုထည့်ပါ။',
    'Please enter a number.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော နံပါတ် ကိုရွေးချယ်ပါ။',
    'The password is invalid.' => 'မှန်ကန်သောစကား၀ှက်မဟုတ်ပါ။',
    'Please enter a percentage value.' => 'ကျေးဇူးပြု၍ ရာခိုင်နှုန်းတန်ဖိုးထည့်ပါ။',
    'The values do not match.' => 'တန်ဖိုးများကိုက်ညီမှုမရှိပါ။',
    'Please enter a valid time.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအချိန်ကိုထည့်ပါ။',
    'Please select a valid timezone.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောအချိန်ဇုန်ကိုရွေးပါ။',
    'Please enter a valid URL.' => 'ကျေးဇူးပြု၍ သင့်လျှော်သော် URL ကိုရွေးပါ။',
    'Please enter a valid search term.' => 'ကျေးဇူးပြု၍ သင့် လျှော်သော်ရှာဖွေမှု term များထည့်ပါ။',
    'Please provide a valid phone number.' => 'ကျေးဇူးပြု၍ သင့် လျှော်သော်ရှာဖွေမှု ဖုန်းနံပါတ်ထည့်ပါ။',
    'The checkbox has an invalid value.' => 'Checkbox တန်ဖိုးသည် မှန်ကန်မှုမရှိပါ။',
    'Please enter a valid email address.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော် email လိပ်စာထည့်ပါ။',
    'Please select a valid option.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော် ရွေးချယ်မှု ကိုရွေးပါ။',
    'Please select a valid range.' => 'ကျေးဇူးပြု၍ မှန်ကန်သော အပိုင်းအခြား ကိုရွေးပါ။',
    'Please enter a valid week.' => 'ကျေးဇူးပြု၍ မှန်ကန်သောရက်သတ္တပတ်ကိုထည့်ပါ။',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'အသုံးပြုခွင့် ခြွင်းချက်တစ်ခုဖြစ်သွားသည်။',
    'Authentication credentials could not be found.' => 'အသုံးပြုခွင့် အထောက်အထားများ ရှာမတွေ့ပါ။',
    'Authentication request could not be processed due to a system problem.' => 'System ပြဿနာအခက်အခဲရှိ နေပါသဖြင့် အသုံးပြုခွင့်တောင်းဆိုချက်ကို ဆောင်ရွက်၍မရ နိုင်ပါ။',
    'Invalid credentials.' => 'သင့်လျှော်သော် အထောက်အထားမဟုတ်ပါ။',
    'Cookie has already been used by someone else.' => 'Cookie ကို တစ်စုံတစ်ယောက်မှ အသုံးပြုပြီးဖြစ်သည်။',
    'Not privileged to request the resource.' => 'အရင်းအမြစ်ကိုတောင်းဆိုရန်အခွင့်ထူးမရပါ။',
    'Invalid CSRF token.' => 'သင့်လျှော်သော် CSRF token မဟုတ်ပါ။',
    'No authentication provider found to support the authentication token.' => 'အထောက်အထားစိစစ်ခြင်းသင်္ကေတကိုပံ့ပိုးရန် မည်သည့်အထောက်အထားစိစစ်ရေး ၀န်ဆောင်မှုမှမတွေ့ပါ။',
    'No session available, it either timed out or cookies are not enabled.' => 'Session မအားလပ်ပါ။ Session အချိန်ကုန်သွားခြင်း (သို့မဟုတ်) cookies များကိုဖွင့်ထားခြင်းမရှိပါ။',
    'No token could be found.' => 'Toke  ရှာမတွေ့ပါ။',
    'Username could not be found.' => 'အသုံးပြုသူအမည် ရှာဖွေတွေ့ရှိချင်းမရှိပါ။',
    'Account has expired.' => 'အကောင့် သက်တမ်းကုန်လွန်သွားပါပြီ။',
    'Credentials have expired.' => 'အထောက်အထားသက်တန်း ကုန်လွန်သွားပါပြီ။',
    'Account is disabled.' => 'အကောင့်ပိတ်ထားပါသည်။',
    'Account is locked.' => 'အကောင့် လောခ်ကျသွားပါပြီ။',
    'Too many failed login attempts, please try again later.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက်မှထပ်ကြိုးစားပါ။',
    'Invalid or expired login link.' => 'မသင့်လျှော်သော် (သို့မဟုတ်) သက်တန်းကုန်သော login link ဖြစ်ပါသည်။',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Login ၀င်ရန်ကြိုးစားမှုများလွန်းပါသည်၊ ကျေးဇူးပြု၍ နောက် %minutes% မှထပ်မံကြိုးစားပါ။',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini, ou le répertoire configuré n\'existe pas.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% an|%count% ans',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'Un problème est survenu lors de la validation de votre demande de réinitialisation de mot de passe',
    'There was a problem handling your password reset request' => 'Un problème est survenu lors du traitement de votre demande de réinitialisation de mot de passe',
    'The link in your email is expired. Please try to reset your password again.' => 'Le lien dans votre e-mail est expiré. Veuillez réessayer de réinitialiser votre mot de passe.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Veuillez mettre à jour la configuration de request_password_repository dans config/packages/reset_password.yaml pour pointer vers votre service "request password repository"',
    'The reset password link is invalid. Please try to reset your password again.' => 'Le lien de réinitialisation du mot de passe n\'est pas valide. Veuillez réessayer de réinitialiser votre mot de passe',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'Vous avez déjà demandé un e-mail de réinitialisation du mot de passe. Veuillez vérifier votre e-mail ou réessayer bientôt.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% année|%count% années',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'The link to verify your email has expired. Please request a new link.' => 'Le lien pour vérifier votre adresse e-mail a expiré. Veuillez refaire une demande de réinitialisation.',
    'The link to verify your email is invalid. Please request a new link.' => 'Le lien pour vérifier votre adresse e-mail est invalide. Veuillez refaire une demande de réinitialisation.',
    'The link to verify your email appears to be for a different account or email. Please request a new link.' => 'Le lien permettant de vérifier votre adresse e-mail semble correspondre à un autre compte ou e-mail. Veuillez refaire une demande de réinitialisation.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
    'filter_searchword' => 'Recherche...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
