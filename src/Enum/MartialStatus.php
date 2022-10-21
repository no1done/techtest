<?php

namespace Application\Enum;

enum MartialStatus : string {
    case single = "Single";
    case married = "Married";
    case living_together = "Living Together";
    case separated = "Separated";
    case divorced = "Divorced";
    case widowed = "Widowed";
    case other = "Other";
}
