<?php

namespace App\Enums;

enum FeeType: string
{
  case Basic  = 'basic';
  case Special  = 'special';
  case Association  = 'association';
  case Storage = 'storage';
}
