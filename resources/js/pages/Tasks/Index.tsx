import Layout from '@/components/Layout';
import { Link } from '@inertiajs/react';

interface Task {
    id: number;
    name: string;
}

interface Props {
    tasks: Task[];
}

export default function Index({ tasks }: Props) {
    return (
        <Layout>
            <div className="my-3">
                <a
                    href="/tasks/create"
                    className="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                >
                    Create
                </a>
            </div>
            <div>
                {tasks.map((task) => (
                    <Link href={`/tasks/${task.id}`} className="hover:text-slate-300 hover:underline">
                        <div key={task.id} className="flex flex-row p-2">
                            <div className="text-lg">{task.name} </div>
                        </div>
                    </Link>
                ))}
            </div>
        </Layout>
    );
}
