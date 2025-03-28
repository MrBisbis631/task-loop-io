import AppLayout from '@/layouts/app-layout';
import { LaravelPaginator } from '@/types';
import { Head } from '@inertiajs/react';
type Props = {
    clients: LaravelPaginator<App.Http.Resources.ClientResource>;
};

function Index({ clients }: Props) {
    return (
        <AppLayout breadcrumbs={[{ title: 'Clients', href: route('clients.index') }]}>
            <Head title="Clients" />
            <code className="">{JSON.stringify(clients, null, 2)}</code>
        </AppLayout>
    );
}

export default Index;
