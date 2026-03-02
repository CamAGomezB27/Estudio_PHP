<?php  

    enum CourseType: string {
        case FREE = 'Gratis';
        case PAID = 'Pago';
        case VIP = 'VIP';

        public function label(): string
        {
            return match($this) {
                self::FREE => 'Curso gratuito',
                self::PAID => 'Curso de pago',
                self::VIP => 'Curso Premium',
            };
        }
    }