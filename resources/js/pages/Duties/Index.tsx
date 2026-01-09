import Layout from '@/components/Layout';

interface Staffmember {
    id: number;
    name: string;
    role: string;
    date_started: string;
    date_ended?: string | null;
    deleted_at?: string | null;
}

interface Task {
    id: number;
    name: string;
    deleted_at?: string | null;
}

interface Duty {
    id: number;
    staffmember_id: number;
    task_id: number;
    dutydate: string;
    shift_type?: string | null;
    hours?: number | null;
    staffmember: Staffmember;
    task: Task;
}

interface Props {
    duties: Duty[];
}

export default function Index({ duties }: Props) {
    return (
        <Layout>
            <div className="my-3">
                <a
                    href="/duties/create"
                    className="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                >
                    Create
                </a>
            </div>
            <div>
                <h1>Listing all duties:</h1>
                {duties.map((duty) => (
                    <div key={duty.id} className="flex flex-row p-2 text-start">
                        <div className="px-2">{duty.dutydate} </div>
                        <div className="px-2">
                            {duty.staffmember.name} ({duty.staffmember.role}){' '}
                        </div>
                        <div>{duty.task.name}</div>
                    </div>
                ))}
            </div>
        </Layout>
    );
}
