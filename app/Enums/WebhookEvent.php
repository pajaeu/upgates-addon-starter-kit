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

    case NewsCreate = 'News.create';
    case NewsUpdate = 'News.update';
    case NewsDelete = 'News.delete';

    case AdvisorCreate = 'Advisor.create';
    case AdvisorUpdate = 'Advisor.update';
    case AdvisorDelete = 'Advisor.delete';

    case VouchersCreate = 'Vouchers.create';
    case VouchersUpdate = 'Vouchers.update';
    case VouchersDelete = 'Vouchers.delete';

    case SuppliersCreate = 'Suppliers.create';
    case SuppliersUpdate = 'Suppliers.update';
    case SuppliersDelete = 'Suppliers.delete';

    case RecyclingFeesCreate = 'RecyclingFees.create';
    case RecyclingFeesUpdate = 'RecyclingFees.update';
    case RecyclingFeesDelete = 'RecyclingFees.delete';

    case PricingFormulasCreate = 'PricingFormulas.create';
    case PricingFormulasUpdate = 'PricingFormulas.update';
    case PricingFormulasDelete = 'PricingFormulas.delete';

    case VoucherTemplatesCreate = 'VoucherTemplates.create';
    case VoucherTemplatesUpdate = 'VoucherTemplates.update';
    case VoucherTemplatesDelete = 'VoucherTemplates.delete';

    case MailTemplatesCreate = 'MailTemplates.create';
    case MailTemplatesUpdate = 'MailTemplates.update';
    case MailTemplatesDelete = 'MailTemplates.delete';

    case UnitsCreate = 'Units.create';
    case UnitsUpdate = 'Units.update';
    case UnitsDelete = 'Units.delete';

    case VatsCreate = 'Vats.create';
    case VatsUpdate = 'Vats.update';
    case VatsDelete = 'Vats.delete';

    case AgreementsCreate = 'Agreements.create';
    case AgreementsUpdate = 'Agreements.update';
    case AgreementsDelete = 'Agreements.delete';

    case SurveysCreate = 'Surveys.create';
    case SurveysUpdate = 'Surveys.update';
    case SurveysDelete = 'Surveys.delete';

    case FormsCreate = 'Forms.create';
    case FormsUpdate = 'Forms.update';
    case FormsDelete = 'Forms.delete';
}
