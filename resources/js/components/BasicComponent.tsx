import { CreateDutyProps } from '@/components/types';

export default function BasicComponent({ staff, tasks }: CreateDutyProps) {
    return (
        <div>
            <h1>Oh Yeah!</h1>
            <pre>{JSON.stringify(tasks, null, 2)}</pre>
            <pre>{JSON.stringify(staff, null, 2)}</pre>
        </div>
    );
}
