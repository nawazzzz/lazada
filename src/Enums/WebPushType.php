<?php

namespace Laraditz\Lazada\Enums;

enum WebPushType: int
{
    case TradeOrder = 0;
    case ProductQualityControl = 1;
    case ProductUpdate = 3;
    case ShallowStock = 6;
    case ShortVideoStateUpdate = 7;
    case AuthorizationTokenExpiration = 8;
    case ReverseOrder = 10;
    case Promotion = 11;
    case ProductCategoryUpdate = 12;
    case SellerStatusUpdate = 13;
    case FulfillmentOrderUpdate = 14;
    case ProductReview = 21;
}
