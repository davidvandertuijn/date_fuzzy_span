# Date Fuzzy Span

<a href="https://packagist.org/packages/davidvandertuijn/date_fuzzy_span"><img src="https://poser.pugx.org/davidvandertuijn/date_fuzzy_span/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/date_fuzzy_span"><img src="https://poser.pugx.org/davidvandertuijn/date_fuzzy_span/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/date_fuzzy_span"><img src="https://poser.pugx.org/davidvandertuijn/date_fuzzy_span/license.svg" alt="License"></a>

![Date Fuzzy Span](https://cdn.davidvandertuijn.nl/github/date_fuzzy_span.png)

The “Date Fuzzy Span” tool is designed to help users analyze and interpret date ranges with a degree of flexibility. This functionality is particularly useful for handling uncertain or approximate date values in various applications, such as project management, event planning, and historical analysis.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/date_fuzzy_span
```

## Usage

```php
date_fuzzy_span(time() - 10); // moments ago
date_fuzzy_span(time() + 20); // in moments
```

## Localization

The default output is English:

* moments ago **|** in moments
* a few minutes ago **|** in a few minutes
* less than an hour ago **|** in less than an hour
* a couple of hours ago **|** in a couple of hours
* less than a day ago **|** in less than a day
* about a day ago **|** in about a day
* a couple of days ago **|** in a couple of days
* less than a week ago **|** in less than a week
* about a week ago **|** in about a week
* less than a month ago **|** in less than a month
* about a month ago **|** in about a month
* a couple of months ago **|** in a couple of months
* less than a year ago **|** in less than a year
* about a year ago **|** in about a year
* a couple of years ago **|** in a couple of years
* a few years ago **|** in a few years
* about a decade ago **|** in about a decade
* a couple of decades ago **|** in a couple of decades
* several decades ago **|** in several decades
* a long time ago **|** in a long time
