import Layout from '@/components/Layout';

interface Staffmember {
    id: number;
    name: string;
    role: string;
}

interface Props {
    staffmember: Staffmember;
}

export default function Index({ staffmember }: Props) {
    return (
        <Layout>
            <div>{staffmember.name}</div>
            <div>{staffmember.role}</div>
            <div className="my-3">
                <a
                    href={`/staff/${staffmember.id}/edit`}
                    className="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                >
                    Edit
                </a>
            </div>
        </Layout>
    );
}
