import Layout from '@/components/Layout';
import { Link } from '@inertiajs/react';

interface Staff {
    id: number;
    name: string;
    role: string;
}

interface Props {
    staff: Staff[];
}

export default function Index({ staff }: Props) {
    return (
        <Layout>
            <div className="my-3">
                <a
                    href="/staff/create"
                    className="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                >
                    Create
                </a>
            </div>
            <div>
                {staff.map((member) => (
                    <Link href={`/staff/${member.id}`} className="hover:text-slate-300 hover:underline">
                        <div key={member.id} className="flex flex-row p-2">
                            <div className="text-lg">{member.name} </div>
                            <> | </>
                            <div className="text-lg"> {member.role}</div>
                        </div>
                    </Link>
                ))}
            </div>
        </Layout>
    );
}
