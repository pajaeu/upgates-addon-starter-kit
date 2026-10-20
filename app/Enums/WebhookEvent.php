<?php

declare(strict_types=1);

namespace App\Enums;

enum WebhookEvent: string
{
    case OrdersCreate = 'Orders.create';
    case OrdersUpdate = 'Orders.update';
    case OrdersDelete = 'Orders.delete';

    case CustomersCreate = 'Customers.create';
    case CustomersUpdate = 'Customers.update';
    case CustomersDelete = 'Customers.delete';

    case ProductsCreate = 'Products.create';
    case ProductsUpdate = 'Products.update';
    case ProductsDelete = 'Products.delete';

    case CategoriesCreate = 'Categories.create';
    case CategoriesUpdate = 'Categories.update';
    case CategoriesDelete = 'Categories.delete';

    case OrderStatusesCreate = 'OrderStatuses.create';
    case OrderStatusesUpdate = 'OrderStatuses.update';
    case OrderStatusesDelete = 'OrderStatuses.delete';

    case PaymentsCreate = 'Payments.create';
    case PaymentsUpdate = 'Payments.update';
    case PaymentsDelete = 'Payments.delete';

    case ShipmentsCreate = 'Shipments.create';
    case ShipmentsUpdate = 'Shipments.update';
    case ShipmentsDelete = 'Shipments.delete';

    case LanguagesCreate = 'Languages.create';
    case LanguagesUpdate = 'Languages.update';
    case LanguagesDelete = 'Languages.delete';

    case LabelsCreate = 'Labels.create';
    case LabelsUpdate = 'Labels.update';
    case LabelsDelete = 'Labels.delete';

    case PricelistsCreate = 'Pricelists.create';
    case PricelistsUpdate = 'Pricelists.update';
    case PricelistsDelete = 'Pricelists.delete';

    case AvailabilitiesCreate = 'Availabilities.create';
    case AvailabilitiesUpdate = 'Availabilities.update';
    case AvailabilitiesDelete = 'Availabilities.delete';

    case InvoicesCreate = 'Invoices.create';
    case InvoicesUpdate = 'Invoices.update';
    case InvoicesDelete = 'Invoices.delete';

    case UsersCreate = 'Users.create';
    case UsersUpdate = 'Users.update';
    case UsersDelete = 'Users.delete';

    case UsersRolesCreate = 'UsersRoles.create';
    case UsersRolesUpdate = 'UsersRoles.update';
    case UsersRolesDelete = 'UsersRoles.delete';

    case TranslationsCreate = 'Translations.create';
    case TranslationsUpdate = 'Translations.update';
    case TranslationsDelete = 'Translations.delete';

    case BenefitsCreate = 'Benefits.create';
    case BenefitsUpdate = 'Benefits.update';
    case BenefitsDelete = 'Benefits.delete';
}
